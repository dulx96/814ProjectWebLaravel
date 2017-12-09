<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class products extends Model
{
    //
    public static function get32Products()
    {
        $query =
            DB::table('products')
                ->leftJoin('productimages', 'products.ProductID', '=',
                    'productimages.ImageProductId')
                ->limit(20)
                ->get();
        return $query;
    }

    public static function productsFilter($order, $manufactuer, $category)
    {
        if ($order == 0) {
            if (strcmp($manufactuer, "0") != 0 && strcmp($category, "0") == 0) {
                $query = self::getProductsByManufactuer($manufactuer);
            } else if (strcmp($manufactuer, "0") == 0 && strcmp($category, "0") != 0) {
                $query = self::getProductsByCategory($category);
            } else if (strcmp($manufactuer, "0") != 0 && strcmp($category, "0") != 0) {
                $query = DB::table('products')
                    ->where("ProductManufacturer", "=", $manufactuer)
                    ->leftJoin('productimages', 'products.ProductID', '=',
                        'productimages.ImageProductId')
                    ->leftJoin('productcategories', 'products.ProductCategoryID', '=',
                        'productcategories.CategoryID')->where("CategoryName", "=",
                        $category)
                    ->limit(20)
                    ->get();
            }
        } else if ($order == 1) {
            if(strcmp($manufactuer, "0") == 0 && strcmp($category, "0") == 0) {
                $query = self::get52ProducsOrderBySmallToBig();
            } else if(strcmp($manufactuer, "0") != 0 && strcmp($category, "0") == 0) {
                $query =
                    DB::table('products')
                        ->where("ProductManufacturer", "=", $manufactuer)
                        ->leftJoin('productimages', 'products.ProductID', '=',
                            'productimages.ImageProductId')->orderBy("ProductPrice")
                        ->limit(20)
                        ->get();
            } else if(strcmp($manufactuer, "0") == 0 && strcmp($category, "0") != 0) {
                $query =
                    DB::table('products')
                        ->leftJoin('productimages', 'products.ProductID', '=',
                            'productimages.ImageProductId')->orderBy("ProductPrice")
                        ->leftJoin('productcategories', 'products.ProductCategoryID', '=',
                            'productcategories.CategoryID')->where("CategoryName", "=",
                            $category)
                        ->limit(20)
                        ->get();
            } else if(strcmp($manufactuer, "0") != 0 && strcmp($category, "0") != 0) {
                $query =
                    DB::table('products')
                        ->where("ProductManufacturer", "=", $manufactuer)
                        ->leftJoin('productimages', 'products.ProductID', '=',
                            'productimages.ImageProductId')->orderBy("ProductPrice")
                        ->leftJoin('productcategories', 'products.ProductCategoryID', '=',
                            'productcategories.CategoryID')->where("CategoryName", "=",
                            $category)
                        ->limit(20)
                        ->get();
            }

        } else {
            if(strcmp($manufactuer, "0") == 0 && strcmp($category, "0") == 0) {
                $query = self::get52ProducsOrderByBigToSmall();
            } else if(strcmp($manufactuer, "0") != 0 && strcmp($category, "0") == 0) {
                $query =
                    DB::table('products')
                        ->where("ProductManufacturer", "=", $manufactuer)
                        ->leftJoin('productimages', 'products.ProductID', '=',
                            'productimages.ImageProductId')->orderBy("ProductPrice","desc")
                        ->limit(20)
                        ->get();
            } else if(strcmp($manufactuer, "0") == 0 && strcmp($category, "0") != 0) {
                $query =
                    DB::table('products')
                        ->leftJoin('productimages', 'products.ProductID', '=',
                            'productimages.ImageProductId')->orderBy("ProductPrice","desc")
                        ->leftJoin('productcategories', 'products.ProductCategoryID', '=',
                            'productcategories.CategoryID')->where("CategoryName", "=",
                            $category)
                        ->limit(20)
                        ->get();
            } else if(strcmp($manufactuer, "0") != 0 && strcmp($category, "0") != 0) {
                $query =
                    DB::table('products')
                        ->where("ProductManufacturer", "=", $manufactuer)
                        ->leftJoin('productimages', 'products.ProductID', '=',
                            'productimages.ImageProductId')->orderBy("ProductPrice","desc")
                        ->leftJoin('productcategories', 'products.ProductCategoryID', '=',
                            'productcategories.CategoryID')->where("CategoryName", "=",
                            $category)
                        ->limit(20)
                        ->get();
            }
        }
        return $query;
    }

    public static function getAllCategory()
    {
        $query = DB::table("productcategories")->get();
        return $query;
    }

    public static function get52ProducsOrderBySmallToBig()
    {
        $query =
            DB::table('products')
                ->leftJoin('productimages', 'products.ProductID', '=',
                    'productimages.ImageProductId')
                ->orderBy('ProductPrice')->limit(20)->get();
        return $query;
    }

    public static function get52ProducsOrderByBigToSmall()
    {
        $query =
            DB::table('products')
                ->leftJoin('productimages', 'products.ProductID', '=',
                    'productimages.ImageProductId')
                ->orderBy('ProductPrice', 'desc')
                ->limit(20)
                ->get();
        return $query;
    }

    public static function getAllManufactuer()
    {
        $query = DB::table('products')->select('ProductManufacturer')
            ->orderByDesc('ProductManufacturer')->distinct()->get();
        return $query;
    }

    public static function getProductsByManufactuer($str)
    {
        $query =
            DB::table('products')->where("ProductManufacturer", "=", $str)
                ->leftJoin('productimages', 'products.ProductID', '=',
                    'productimages.ImageProductId')
                ->limit(20)
                ->get();
        return $query;
    }

    public static function getProductsByCategory($str)
    {
        $query =
            DB::table('products')
                ->leftJoin('productimages', 'products.ProductID', '=',
                    'productimages.ImageProductId')
                ->leftJoin('productcategories', 'products.ProductCategoryID', '=',
                    'productcategories.CategoryID')->where("CategoryName", "=", $str)
                ->limit(20)
                ->get();
        return $query;
    }

}
