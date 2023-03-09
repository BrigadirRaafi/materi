<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<section class="h-full bg-stone-400">
    <div class="container h-full p-10">
      <div
        class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
        <div class="w-full">
          <div
            class="block rounded-lg bg-white dark:bg-neutral-200">
            <div class="g-0 lg:flex lg:flex-wrap">
              <div class="px-4 md:px-0 lg:w-6/12">
                <div class="md:mx-6 md:p-12">
                  <div class="text-center">
                    <img
                      class="mx-auto w-48"
                      src="smkn2.png"
                      alt="logo" />
                    <h4 class="mt-1 mb-10 pb-1 text-xl font-semibold text-black">
                      E-Discipline
                    </h4>
                  </div>
                  <form action="proses-login.php" method="post">
                    <p class="mb-4 text-black font-serif">Please login to your account</p>
                    <div class="relative mb-4" data-te-input-wrapper-init>
                    <label
                        for="exampleFormControlInput1"
                        class="text-black"
                        >Username
                      </label>
                      <input
                        type="text"
                        name="username"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-white text-black py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-black [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInput1"
                        placeholder="username" />
                    </div>
                    <div class="relative mb-4" data-te-input-wrapper-init>
                    <label
                        for="exampleFormControlInput11"
                        class="text-black"
                        >Password
                      </label>
                      <input
                        type="password"
                        name="ambilpass"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-white text-black py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-black [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInput11"
                        placeholder="password" />
                    </div>
                    <div class="mb-12 pt-1 pb-1 text-center">
                      <button
                        class="mb-3 inline-block w-full rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                        type="submit"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        style="
                          background: #877B7B;
                        ">
                        Log in
                      </button>
                    </div>
                    <div class="flex items-center justify-between pb-6">
                    </div>
                  </form>
                </div>
              </div>
              <div
                class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none bg-[url('banner_1.jpg')]">
    
                <div class="px-4 py-6 text-black md:mx-6 md:p-12">
                  <h4 class="mb-6 text-xl font-semibold">
                    E-Discipline
                  </h4>
                  <p class="text-sm">
                  Website untuk menghukum siswa nakal
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    </a>
</body>
</html>
