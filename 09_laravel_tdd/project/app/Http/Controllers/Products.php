<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Products extends Controller
{
    public function show()
    {
        if (!auth()->user()) {
            abort(403);
        }

        // magazynier-4, szef-0
        $rolesArr = array(4, 0);
        if (in_array(auth()->user()->role, $rolesArr)) {
            return view('products.show')->with('products', Product::all());
        }

        // kierownik-2
        if (auth()->user()->role==2) {
            $user = auth()->user();
            if ($user instanceof User) {
                $products = $this->getProductsByUser1($user);
                return view('products.show')->with('products', $products);
            }
        }

        // user 1
        if (auth()->user()->role==1) {
            $user = auth()->user();
            if ($user instanceof User) {
                $products = $this->getProductsByUser1($user);
                return view('products.show')->with('products', $products);
            }
        }

        abort(403);
    }

//  zwracanie widoku z formem  i dodawanie produktow do bazy
    public function create(): mixed
    {
        return view('products.create');
    }

    public function store(Request $request): mixed
    {
        // Validation rules for the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $name = $request->input('name');
        $qty = $request->input('qty');
        $facility_id = Auth::user()->facility;

        // Check if the product with the same name and facility_id already exists
        $product = Product::where('name', $name)
            ->where('facility_id', $facility_id)
            ->first();

        if ($product) {
            // If the product exists, update its quantity
            $product->qty += $qty;
        } else {
            // If the product doesn't exist, create a new one
            $product = new Product;
            $product->facility_id = $facility_id;
            $product->name = $name;
            $product->qty = $qty;
        }

        $product->save();

        // Redirect the user to the products with a success message
        return redirect()->route('products')->with('success', 'Product updated successfully.');
    }




    private function getFacilityByUser1(User $user): ?Facility
    {
        if (isset($user)) {
            $el = Facility::query()
                ->where('id', $user->getAttribute('facility'))
                ->get()->first();
            if (isset($el)) {
                if ($el instanceof Facility) {
                    return $el;
                }
            }
        }
        return null;
    }


//    private function getFacilityByUser2(User $user): ?Facility
//    {
//        if (isset($user)) {
//            $el = Facility::query()
//                ->where('szefu', $user->getAttribute('name'))
//                ->get()->first();
//            if (isset($el)) {
//                if ($el instanceof Facility) {
//                    return $el;
//                }
//            }
//        }
//        return null;
//    }

    /**
     * @return Products[]
     */
    private function getProductsByUser1(User $user): ?array
    {
        $facility = $this->getFacilityByUser1($user);
        return $this->getProductsByFacility($facility);
    }

    /**
     * @return Products[]
     */
    private function getProductsByUser2(User $user): ?array
    {
        $facility = $this->getFacilityByUser2($user);
        return $this->getProductsByFacility($facility);
    }

    /**
     * @return Products[]
     */
    private function getProductsByFacility(?Facility $facility): ?array
    {
        $products = array();
        if (isset($facility)) {
            $elems = Product::query()
                ->where('facility_id', $facility->getAttribute('id'))
                ->get();

            foreach ($elems as $el) {
                if ($el instanceof Product) {
                    $products[] = $el;
                }
            }
        }

        return $products;
    }
}
