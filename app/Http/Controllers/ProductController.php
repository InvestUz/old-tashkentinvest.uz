<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('id')->paginate(15);
        return view('pages.product.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function add()
    {

        return view('pages.product.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'yer_uchastkasi_raqami' => 'required|string|max:255|unique:products,yer_uchastkasi_raqami',
            'tuman' => 'required|string|max:255',
            'mahalla' => 'required|string|max:255',
            'manzil' => 'required|string|max:255',
            'maydoni' => 'required|numeric|between:0,99999.9999',
            'mulk_huquqi' => 'nullable|string|max:255',
            'ixtisosligi' => 'nullable|string|max:255',
            'photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = new Product();
        $product->fill($request->except('photo'));
        $product->does_he_putted_tuman_info = $request->input('does_he_putted_tuman_info', 1);
        $product->tuman_user_id = auth()->user()->id;
        $product->tuman_date = now();

        $product->photo = $this->handlePhotoUpload($request);

        try {
            $product->save();
        } catch (\Exception $e) {
            Log::error('Product creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Product creation failed. Please try again.');
        }

        return redirect()->back()->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('pages.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $tumanOptions = [
            'Учтепа тумани' => 1,
            'Бектемир тумани' => 2,
            'Чилонзор тумани' => 3,
            'Яшнобод тумани' => 4,
            'Яккасарой тумани' => 5,
            'Сергели тумани' => 6,
            'Юнусобод тумани' => 7,
            'Олмазор тумани' => 8,
            'Мирзо Улуғбек тумани' => 9,
            'Шайхонтохур тумани' => 10,
            'Миробод тумани' => 11,
            'Янгиҳаёт тумани' => 12,
        ];
        return view('pages.product.edit', compact('product', 'tumanOptions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'yer_uchastkasi_raqami' => 'required|string|max:255|unique:products,yer_uchastkasi_raqami,' . $id,
            'tuman' => 'required|string|max:255',
            'mahalla' => 'required|string|max:255',
            'manzil' => 'required|string|max:255',
            'maydoni' => 'required|numeric|between:0,99999.9999',
            'mulk_huquqi' => 'nullable|string|max:255',
            'ixtisosligi' => 'nullable|string|max:255',
            'photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->fill($request->except('photo'));
        $product->tuman_user_id = auth()->user()->id;

        $product->photo = $this->handlePhotoUpload($request);

        try {
            $product->save();
        } catch (\Exception $e) {
            Log::error('Product update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Product update failed. Please try again.');
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->photo) {
            $filePath = 'public/' . $product->photo;
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }

        try {
            $product->delete();
        } catch (\Exception $e) {
            Log::error('Product deletion failed: ' . $e->getMessage());
            return redirect()->route('products.index')->with('error', 'Product deletion failed. Please try again.');
        }

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    private function handlePhotoUpload(Request $request)
    {
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/masterPlan', $filename);
            return $path;
        }
        return null;
    }
}
