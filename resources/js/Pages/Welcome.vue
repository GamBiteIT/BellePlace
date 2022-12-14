<script setup>
import { App, Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />

    <div style="background-image: url('https://images.hdqwalls.com/wallpapers/4k-tadrart-algeria-5x.jpg');" class=" w-screen h-screen bg-cover  " >
       
        
      <!-- !!! Header !!! -->
      <div class="backdrop-blur-sm " style="display: inline-block; width: 100vw;height: 13vh;" >
        <p class="text-center font-serif absolute left-10 top-0  " style=" color: white; font-size: 80px; background-color: transparent;"> Belle Place </p>
     
        <div v-if="canLogin" class="hidden fixed  right-10 top-10" style="display: inline-block;">
               <Link v-if="$page.props.auth.user" :href="route('partner.dashboard')" class=" text-sm text-white text-3xl hover:underline right-0  ">Dashboard</Link>
            <template v-else>
                <Link :href="route('login')" style="display:inline-block" class=" text-sm text-white no-underline hover:underline text-3xl ">Log in</Link>
                <Link v-if="canRegister" :href="route('register')" style="margin-left:2vw; inline-block" class="text-right text-sm  text-white no-underline hover:underline text-3xl">Register</Link>
            </template>
        </div>
    </div>

      <!-- !!! Header !!! -->



<!-- Disover algeria  -->

     <div class="  text-center items-center text-white" style="margin-top: 3vh;" >
        <h1 class="font-serif text-transparent text-8xl bg-clip-text bg-white" >
        Discover Algeria
        </h1>
            <hr style=" width: 60vw; margin-top: 3vh;margin-left:20vw">
    

<!-- !!! A small Introduction About Algeria & why we r making this website  -->



       <div style="margin-right: 20vw;margin-left:20vw" >
        <br>
                <br>
            <p>Although Algeria is one of the largest countries in the world, many do not know the country.</p>
            
            <p> Algeria is a country very rich in culture as well as in breathtaking landscapes. Algeria is one of the most diversified countries in terms of environment. These include towering mountains, the beautiful desert and peaceful Mediterranean beaches.</p>

            <p style="display:inline-block">
                The fauna and flora are very varied with emblematic animals such as the fennec fox and plants adapted to the different climates of Algeria. As the environment in Algeria is very varied, so are the cultures that have emerged from it, which makes the country particularly diverse. Despite Algeria's great wealth, few people think of Algeria as a place to visit.
                
                
             </p>
             <p style="display:inline-block;" > 
                  So, we &nbsp;
                  <p style="display:inline-block; font-size: 24px;">The BGS Group</p> 
                  , decided to create a website to show the beauty of our country.</p> 
                  

                  <br>
                  <br>
           
            <p>
                <strong>
                Thanks to this website, Algerians will be able to share their favorite places in Algeria, such as mountains, beaches, forests to visit. They will be able to tell others about their country, their village, etc. They will also be able to share photos and videos in order to present their country using different media. 

            </strong></p>
        </div>
       
     </div>
    
    



         <!-- a small introduction -->

<!--          
         <article class="p-1.5 mx-auto my-4 max-w-sm rounded-xl bg-gradient-to-r from-green-900  via-red-700 to-white-700">
          <div class="backdrop-blur-sm bg-white p-5 rounded-lg">
            <h4 class="text-2xl font-bold"></h4>
            <a class="hover:underline text-gray-600" href="" target="_blank" title="codingspace">See More↗</a>
          </div>
        </article>
    -->

        
  
    </div>
</template>




<style>
.image{
    background-image: url('https://images.hdqwalls.com/wallpapers/4k-tadrart-algeria-5x.jpg');
}

.before-enter{
    opacity: 0;
    transform: translateY(100px);
    transition: all 2s ease-out;
}
.enter{
    opacity: 1;
    transform: translateY(0);
}
.liner{
    margin-left: 20vw; width: 60vw; margin-top: 10px;
}
</style>