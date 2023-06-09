<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>

<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-black text-white rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="hidden md:block w-1/2 bg-indigo-500 py-10 px-10" style="background-image: url(<?php ROOT_DIR ?>assets/images/login_bg.jpg); background-position: right;">
            </div>
            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-white">REGISTER</h1>
                    <p>Enter your information to register</p>
                </div>
                <form action="account/auth/register.php" method="post">
               
                <div class="">
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Username</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-white text-lg"></i></div>
                                <input type="text" 
                                class=" rounded-lg text-gray-500 border-none bg-white w-full -ml-10 pl-10 pr-3 py-2 outline-none" 
                                placeholder="John"
                                name="username">
                            </div>
                        </div>
            
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-lg"></i></div>
                                <input type="email" 
                                class=" rounded-lg text-gray-500 border-none bg-white w-full -ml-10 pl-10 pr-3 py-2 outline-none" 
                                placeholder="johnsmith@example.com" 
                                name="email">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-white text-lg"></i></div>
                                <input type="password" name="password" class="text-gray-500 rounded-lg border-none bg-white w-full -ml-10 pl-10 pr-3 py-2 outline-none" placeholder="************">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-yellow-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold" type="submit">REGISTER NOW</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>    
    
    
<?php include '../../components/footer.php'; ?>