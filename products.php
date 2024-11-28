
<!--

search option on the top  wishlist icon, cart icon-{if logged in otherwise log in button}
multiple filter options -[category, price, sort by]-(one pop up will come from bottom of the page)

-->

<?php 
  include("header.php");
?>
  

  <div class="grid grid-cols-1 px-4 md:grid-cols-2 md:px-6">
    <div class="container flex justify-center items-center py-3 mx-auto">
      <input type="text" id="name" name="name" placeholder="Search..." class="p-2 w-full  bg-transparent border border-gray-500 rounded">
    </div>
    <div class="container grid grid-cols-2 py-3 mx-auto">
      <div class="w-3/4 md:w-2/5 md:justify-self-end">
        <div class="p-2 pt-2 bg-white text-md rounded cursor-pointer flex items-center justify-around">
          <img src="img/svg/filter.svg" alt="" class="h-4 md:h-5">
          <button class="md:text-lg"  data-dialog-target="filters-modal" type="button">Filters</button>
        </div>
      </div>
      <div class="w-3/4 md:w-1/2 justify-self-end">
        <div class="p-2 pt-2 bg-white text-md rounded cursor-pointer flex items-center justify-around">
            <img src="img/svg/list.svg" alt="" class="h-4 md:h-5">
        <button class="md:text-lg" data-dialog-target="category-modal">Categories</button>
        </div>
      </div>
    </div>
  </div>


<div class="container grid grid-cols-1 gap-6 px-4 pt-4 pb-12 mx-auto mt-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:px-6">
        <!-- New Card -->
        <div class="max-w-xs bg-white rounded-lg shadow-lg overflow-hidden mx-auto min-w-80">
            <!-- Product Image -->
             <div class="flex items-center justify-center bg-slate-100">
                <img src="img/Products/2bkh-12(1).png" alt="Product Image" class="w-auto h-48">
            </div>
            <!-- Product Info -->
            <div class="p-4 border-t-2">
                <!-- Product Title -->
                <h2 class="text-lg font-semibold text-gray-800 truncate">Key Holder</h2>

                <!-- Rating and Price -->
                <div class="flex items-center justify-between mt-2">
                    <!-- Free Shipping Badge -->
                    <p class="bg-green-700 text-white text-sm p-[3px] rounded">Free shipping</p>
                    <!-- Price -->
                    <p class="text-xl font-bold text-gray-800">$45.00</p>
                </div>

                <!-- Product Description -->
                <!-- <p class="mt-2 text-sm text-gray-600">A brief description of the product goes here, showcasing its primary features in a concise manner.</p> -->

                <!-- Action Buttons -->
                <div class="flex space-x-2 mt-4">
                    <!-- Add to Cart Button -->
                    <button class="w-1/2 bg-gray-300 text-gray-800 text-sm font-semibold py-2 rounded-lg hover:bg-gray-400 transition-colors">
                        Add to Cart
                    </button>
                    
                    <!-- Buy Now Button -->
                    <button class="w-1/2 bg-[#618190] text-white text-sm font-semibold py-2 rounded-lg hover:bg-[#2f434d]">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- New Card -->
        <div class="max-w-xs bg-white rounded-lg shadow-lg overflow-hidden mx-auto min-w-80">
            <!-- Product Image -->
             <div class="flex items-center justify-center bg-slate-100">
                <img src="img/Products/rmw(2).png" alt="Product Image" class="h-48">
            </div>
            <!-- Product Info -->
            <div class="p-4 border-t-2">
                <!-- Product Title -->
                <h2 class="text-lg font-semibold text-gray-800 truncate">Ram Mandir Ayodhya</h2>

                <!-- Rating and Price -->
                <div class="flex items-center justify-between mt-2">
                    <!-- Free Shipping Badge -->
                    <p class="bg-green-700 text-white text-sm p-[3px] rounded">Free shipping</p>
                    <!-- Price -->
                    <p class="text-xl font-bold text-gray-800">$45.00</p>
                </div>

                <!-- Product Description -->
                <!-- <p class="mt-2 text-sm text-gray-600">A brief description of the product goes here, showcasing its primary features in a concise manner.</p> -->

                <!-- Action Buttons -->
                <div class="flex space-x-2 mt-4">
                    <!-- Add to Cart Button -->
                    <button class="w-1/2 bg-gray-300 text-gray-800 text-sm font-semibold py-2 rounded-lg hover:bg-gray-400 transition-colors">
                        Add to Cart
                    </button>
                    
                    <!-- Buy Now Button -->
                    <button class="w-1/2 bg-[#618190] text-white text-sm font-semibold py-2 rounded-lg hover:bg-[#2f434d]">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- New Card -->
        <div class="max-w-xs bg-white rounded-lg shadow-lg overflow-hidden mx-auto min-w-80">
            <!-- Product Image -->
            <div class="flex items-center justify-center bg-slate-100">
                <img src="img/Products/3ptc-c4(2).png" alt="Product Image" class="w-auto h-48">
            </div> 
            <!-- Product Info -->
            <div class="p-4 border-t-2">
                <!-- Product Title -->
                <h2 class="text-lg font-semibold text-gray-800 truncate">Tray Set</h2>

                <!-- Rating and Price -->
                <div class="flex items-center justify-between mt-2">
                    <!-- Free Shipping Badge -->
                    <p class="bg-green-700 text-white text-sm p-[3px] rounded">Free shipping</p>
                    <!-- Price -->
                    <p class="text-xl font-bold text-gray-800">$45.00</p>
                </div>

                <!-- Product Description -->
                <!-- <p class="mt-2 text-sm text-gray-600">A brief description of the product goes here, showcasing its primary features in a concise manner.</p> -->

                <!-- Action Buttons -->
                <div class="flex space-x-2 mt-4">
                    <!-- Add to Cart Button -->
                    <button class="w-1/2 bg-gray-300 text-gray-800 text-sm font-semibold py-2 rounded-lg hover:bg-gray-400 transition-colors">
                        Add to Cart
                    </button>
                    
                    <!-- Buy Now Button -->
                    <button class="w-1/2 bg-[#618190] text-white text-sm font-semibold py-2 rounded-lg hover:bg-[#2f434d]">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>

        <!-- New Card -->
        <div class="max-w-xs bg-white rounded-lg shadow-lg overflow-hidden mx-auto min-w-80">
            <!-- Product Image -->
            <div class="flex items-center justify-center bg-slate-100">
                <img src="img/Products/smb-c1.png" alt="Product Image" class="w-auto h-48">
            </div>
            <!-- Product Info -->
            <div class="p-4 border-t-2">
                <!-- Product Title -->
                <h2 class="text-lg font-semibold text-gray-800 truncate">Dessert Box</h2>

                <!-- Rating and Price -->
                <div class="flex items-center justify-between mt-2">
                    <!-- Free Shipping Badge -->
                    <p class="bg-green-700 text-white text-sm p-[3px] rounded">Free shipping</p>
                    <!-- Price -->
                    <p class="text-xl font-bold text-gray-800">$45.00</p>
                </div>

                <!-- Product Description -->
                <!-- <p class="mt-2 text-sm text-gray-600">A brief description of the product goes here, showcasing its primary features in a concise manner.</p> -->

                <!-- Action Buttons -->
                <div class="flex space-x-2 mt-4">
                    <!-- Add to Cart Button -->
                    <button class="w-1/2 bg-gray-300 text-gray-800 text-sm font-semibold py-2 rounded-lg hover:bg-gray-400 transition-colors">
                        Add to Cart
                    </button>
                    
                    <!-- Buy Now Button -->
                    <button class="w-1/2 bg-[#618190] text-white text-sm font-semibold py-2 rounded-lg hover:bg-[#2f434d]">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
</div>


<!-- Modals -->
    <div
        data-dialog-backdrop="filters-modal"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
    >   
        <div
            data-dialog="filters-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none" data-dialog-transition="transition-all duration-300"
            class="relative m-4 p-4 w-4/5 md:w-2/5 min-w-[40%] max-w-[80%] rounded-lg bg-white shadow-sm"
        >
            <div class="flex shrink-0 items-center justify-between pb-4 text-xl font-medium text-[#11274f]">
                <p>Filters</p>
                <button data-dialog-close="true">
                    <i class="fa-solid fa-xmark" style="color: #11274f;"></i>
                </button>
            </div>

            <div class="relative border-t border-slate-200 py-4 leading-normal text-[#3c4143] font-light">
                <div class="mb-2">
                    <h3 class="font-medium mb-2 ">Price</h3>
                    <input type="range" min="0" max="100000" class="w-full" />
                    <div class="flex justify-between mt-2">
                        <span>₹0</span>
                        <span>₹100000</span>
                    </div>
                </div>
                <div>
                    <h3 class="font-medium mb-2">Sort By</h3>
                    <select class="w-full p-2 border-0">
                        <option value="price">Price</option>
                        <option value="rating">Rating</option>
                        <option value="newest">Newest</option>
                    </select>
                </div>
            </div>

            <!-- <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
            <button data-dialog-close="true" class="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Cancel
            </button>
            <button data-dialog-close="true" class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
                Confirm
            </button>
            </div> -->
        </div>
    </div>

    <div data-dialog-backdrop="category-modal"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
    >
        <div
            data-dialog="category-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none" data-dialog-transition="transition-all duration-300"
            class="relative m-4 p-4 w-4/5 md:w-2/5 min-w-[40%] max-w-[80%] rounded-lg bg-white shadow-sm"
        >
            <div class="flex shrink-0 items-center justify-between pb-4 text-xl font-medium text-[#11274f]">
                <p>Categories</p>
                <button data-dialog-close="true">
                    <i class="fa-solid fa-xmark" style="color: #11274f;"></i>
                </button>
            </div>
            <div class="relative border-t border-slate-200 py-4 leading-normal text-[#3c4143] font-light">
                <ul>
                    <li>2BKH</li>
                    <li>Bullock Cart</li>
                    <li>Temple</li>
                    <li>Mukhvas Box</li>
                    <li>Night Lamp</li>
                    <li>Wall Clock</li>
                    <li>Throne</li>
                </ul>
            </div>
        </div>
    </div>
<?php
  include("footer.php");
?>
