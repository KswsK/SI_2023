<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Facility;
use Illuminate\Http\Request;
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
