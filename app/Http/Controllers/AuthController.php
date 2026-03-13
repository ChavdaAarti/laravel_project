<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Sub_Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Cart;
use App\Models\cart_item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /* ================= REGISTER ================= */

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'mobile'   => 'required|digits:10',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'mobile'   => $request->mobile,
            'password' => Hash::make($request->password),
        ]);
        return ('success');
       // return redirect('/login')->with('success', 'Registration successful');
    }

    /* ================= LOGIN ================= */

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->with('error', 'Invalid Email or Password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    /* ================= DASHBOARD ================= */

    public function dashboard()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    /* ================= VIEWS ================= */

    public function category_view()
    {
        $category = Category::all();
        return view('category_view', compact('category'));
    }

    public function sub_category_view()
    {
        $sub_category = sub_category::all();
        return view('sub_category_view', compact('sub_category'));
    }

    public function brand_view()
    {
        $brand = Brand::all();
        return view('brand_view', compact('brand'));
    }

    public function product_view()
    {
        $product = Product::all();
        return view('product_view', compact('product'));
    }

    public function main_header()
    {
        return view('main_header');
    }

    public function footer()
    {
        return view('footer');
    }

    public function contact()
    {
        return view('contact');
    }

    /* ================= CART ================= */

    public function add(Request $request,Product $product)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => auth()->id()
        ]);

         $cartItem = cart_item::where('cart_id', $cart->id)
                ->where('product_id', $product->id)
                ->first();

         if ($cartItem)
         {
            // Product already in cart → ADD quantity
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } 
        else
         {
        cart_item::Create(
            [
                'cart_id'    => $cart->id,
                'product_id' => $product->id
            ],
            [
                'quantity' => DB::raw($request->quantity)
            ]
        );
        }
        return redirect('/cart');
    }

    public function index()
    {
        $cart = auth()->user()
                    ->cart()
                    ->with('items.product')
                    ->first();

        return view('cart', compact('cart'));
    }

    /* ================= CHECKOUT ================= */

    public function checkout()
    {
        return view('checkout');
    }

   public function store(Request $request)
    {
    $request->validate([
        'address' => 'required'
    ]);

    $cart = auth()->user()->cart;

    // Safety check
    if (!$cart || $cart->items->isEmpty()) {
        return back()->with('error', 'Your cart is empty');
    }

    // Total price
    $total = $cart->items->sum(function ($item) {
        return $item->product->prod_price * $item->quantity;
    });

    // ✅ TOTAL quantity (IMPORTANT FIX)
    $totalQuantity = $cart->items->sum('quantity');

    // Create order
    Order::create([
        'user_id'     => auth()->id(),
        'address'     => $request->address,
        'quantity'    => $totalQuantity, 
        'total_price' => $total,
    ]);

    // Clear cart
    $cart->items()->delete();

    return redirect('/dashboard')->with('success', 'Order placed successfully');
    }

     public function about()
    {
        return view('about');
    }
}
