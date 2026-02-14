<x-layout>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    <form method="post" action="/register">
        @csrf
        @method('PUT')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Email</label>
            <input type="email" class="input" placeholder="Email" name="email" required/>

            <label class="label">username</label>
            <input type="text" class="input" placeholder="Username" name="name" required/>

            <label class="label">Password</label>
            <input type="password" class="input" placeholder="Password" name="password" required/>

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>


{{--////////////--}}
{{--<?php--}}

{{--use App\Models\ProductCategory;--}}
{{--use App\Models\User;--}}
{{--use Illuminate\Database\Migrations\Migration;--}}
{{--use Illuminate\Database\Schema\Blueprint;--}}
{{--use Illuminate\Support\Facades\Schema;--}}

{{--return new class extends Migration--}}
{{--{--}}
{{--    /**--}}
{{--     * Run the migrations.--}}
{{--     */--}}
{{--    public function up(): void--}}
{{--    {--}}
{{--        Schema::create('products', function (Blueprint $table) {--}}
{{--            $table->id();--}}
{{--            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();--}}
{{--            $table->foreignIdFor(ProductCategory::class)->constrained()->cascadeOnDelete();--}}
{{--            $table->string('name');--}}
{{--            $table->decimal('price');--}}
{{--            $table->string('description');--}}
{{--            $table->timestamps();--}}
{{--        });--}}
{{--    }--}}

{{--    /**--}}
{{--     * Reverse the migrations.--}}
{{--     */--}}
{{--    public function down(): void--}}
{{--    {--}}
{{--        Schema::dropIfExists('products');--}}
{{--    }--}}
{{--};--}}
{{--//////////////--}}
{{--/// <?php--}}

{{--namespace App\Http\Controllers;--}}

{{--use App\Models\ProductCategory;--}}
{{--use Illuminate\Http\Request;--}}

{{--class ProductCategoryController extends Controller--}}
{{--{--}}
{{--    /**--}}
{{--     * Display a listing of the resource.--}}
{{--     */--}}
{{--    public function category()--}}
{{--    {--}}
{{--        $productCategory = ProductCategory::all();--}}
{{--        return view('products.category.index',['productCategory'=>$productCategory]);--}}
{{--    }--}}

{{--    /**--}}
{{--     * Show the form for creating a new resource.--}}
{{--     */--}}
{{--    public function createCategory()--}}
{{--    {--}}
{{--        return view('products.category.create');--}}
{{--    }--}}

{{--    /**--}}
{{--     * Store a newly created resource in storage.--}}
{{--     */--}}
{{--    public function storeCategory(Request $request)--}}
{{--    {--}}
{{--        $data = $request->validate([--}}
{{--            'name'=>'required|unique:product_categories',--}}
{{--        ]);--}}
{{--        ProductCategory::create($data);--}}
{{--        return redirect('/products/category');--}}
{{--    }--}}

{{--    /**--}}
{{--     * Display the specified resource.--}}
{{--     */--}}
{{--    public function show(ProductCategory $id)--}}
{{--    {--}}
{{--        $productCategory = ProductCategory::query()->where('id',$id)->get();--}}
{{--        return view('products.query',['products' => $productCategory,'categoryId'=>$id]);--}}
{{--    }--}}

{{--    /**--}}
{{--     * Show the form for editing the specified resource.--}}
{{--     */--}}
{{--    public function editCategory(ProductCategory $id)--}}
{{--    {--}}
{{--        return view('products.category.edit',['productCategory'=>$id]);--}}
{{--    }--}}

{{--    /**--}}
{{--     * Update the specified resource in storage.--}}
{{--     */--}}
{{--    public function updateCategory(Request $request, ProductCategory $id)--}}
{{--    {--}}
{{--        $data = $request->validate([--}}
{{--            'name'=>'required|unique:product_categories',--}}
{{--        ]);--}}
{{--        $id->update($data);--}}
{{--        return redirect('/products/category');--}}
{{--    }--}}

{{--    /**--}}
{{--     * Remove the specified resource from storage.--}}
{{--     */--}}
{{--    public function destroyCategory(ProductCategory $id)--}}
{{--    {--}}
{{--        $id->delete();--}}
{{--        return redirect('/products/category');--}}
{{--    }--}}
{{--}--}}
{{--//////////////--}}
{{--///--}}
{{--/// <?php--}}

{{--namespace App\Http\Controllers;--}}

{{--use App\Models\ProductCategory;--}}
{{--use Illuminate\Http\Request;--}}

{{--class ProductCategoryController extends Controller--}}
{{--{--}}
{{--    /**--}}
{{--     * Display a listing of the resource.--}}
{{--     */--}}
{{--    public function category()--}}
{{--    {--}}
{{--        $productCategory = ProductCategory::all();--}}
{{--        return view('products.category.index',['productCategory'=>$productCategory]);--}}
{{--    }--}}

{{--    /**--}}
{{--     * Show the form for creating a new resource.--}}
{{--     */--}}
{{--    public function createCategory()--}}
{{--    {--}}
{{--        return view('products.category.create');--}}
{{--    }--}}

{{--    /**--}}
{{--     * Store a newly created resource in storage.--}}
{{--     */--}}
{{--    public function storeCategory(Request $request)--}}
{{--    {--}}
{{--        $data = $request->validate([--}}
{{--            'name'=>'required|unique:product_categories',--}}
{{--        ]);--}}
{{--        ProductCategory::create($data);--}}
{{--        return redirect('/products/category');--}}
{{--    }--}}

{{--    /**--}}
{{--     * Display the specified resource.--}}
{{--     */--}}
{{--    public function show(ProductCategory $id)--}}
{{--    {--}}
{{--        $productCategory = ProductCategory::query()->where('id',$id)->get();--}}
{{--        return view('products.query',['products' => $productCategory,'categoryId'=>$id]);--}}
{{--    }--}}

{{--    /**--}}
{{--     * Show the form for editing the specified resource.--}}
{{--     */--}}
{{--    public function editCategory(ProductCategory $id)--}}
{{--    {--}}
{{--        return view('products.category.edit',['productCategory'=>$id]);--}}
{{--    }--}}

{{--    /**--}}
{{--     * Update the specified resource in storage.--}}
{{--     */--}}
{{--    public function updateCategory(Request $request, ProductCategory $id)--}}
{{--    {--}}
{{--        $data = $request->validate([--}}
{{--            'name'=>'required|unique:product_categories',--}}
{{--        ]);--}}
{{--        $id->update($data);--}}
{{--        return redirect('/products/category');--}}
{{--    }--}}

{{--    /**--}}
{{--     * Remove the specified resource from storage.--}}
{{--     */--}}
{{--    public function destroyCategory(ProductCategory $id)--}}
{{--    {--}}
{{--        $id->delete();--}}
{{--        return redirect('/products/category');--}}
{{--    }--}}
{{--}--}}
{{--//////////--}}
{{--///--}}
{{--/// <?php--}}

{{--namespace App\Models;--}}

{{--use Illuminate\Database\Eloquent\Model;--}}
{{--use Illuminate\Database\Eloquent\Relations\HasMany;--}}

{{--class ProductCategory extends Model--}}
{{--{--}}
{{--    protected $fillable = [--}}
{{--        'name',--}}
{{--    ];--}}

{{--    public function category(): HasMany--}}
{{--    {--}}
{{--        return $this->hasMany(Product::class);--}}
{{--    }--}}
{{--}--}}

