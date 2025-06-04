<!-- <section class="w-full h-100vh py-24" id="wrapper">
    <div class="max-w-xl mx-auto px-4" id="container">
        <img class="absolute z-[-1] ml-[-430px]" src="{{ asset('/storage/main/feedback.png') }}" width="1400px" height="1400px" alt="картинка сзади фидбэка">
        <div class="bg-[#EFEBF1] rounded-md p-8">
        <h2 class="text-center text-2xl font-semibold text-gray-800">Есть вопросы? Свяжитесь с нами</h2>
        <div class="w-full mt-8 space-y-6">
            <div class="w-full">
            <label for="email" class="block text-desc font-semibold mb-2">Ваше имя</label>
            <input id="email" type="email" class="w-full h-12 bg-gray-50 rounded-md px-4" placeholder="Иван" required>
            </div>
            <div class="w-full">
            <label for="password" class="block text-desc font-semibold mb-2">Номер телефона</label>
            <input id="password" type="password" class="w-full h-12 bg-gray-50 rounded-md px-4" placeholder="+7 (999) 999-99-99" required>
            </div>
            <div class="w-full">
            <label for="password" class="block text-desc font-semibold mb-2">Почта</label>
            <input id="password" type="password" class="w-full h-12 bg-gray-50 rounded-md px-4" placeholder="ivan@ya.ru" required>
            </div>
            <div class="w-full text-center">
            <button class="bg-button text-2xl text-white w-80 py-2 rounded-lg">Отправить</button>
            </div>
        </div>
        </div>
    </div>
</section> -->

    <main class="py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-primary mb-6 text-center">Обратная связь</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-secondary mb-4">Оставить сообщение</h2>
                    <form action="#" method="POST"> 
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Ваше имя:</label>
                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Имя">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Ваш email:</label>
                            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Тема сообщения:</label>
                            <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Тема">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Ваше сообщение:</label>
                            <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Текст сообщения"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Отправить
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-secondary mb-4">Контактная информация</h2>
                    <p class="text-gray-700 mb-4">
                        Если у вас возникли вопросы или вам нужна помощь, свяжитесь с нами:
                    </p>
                    <ul class="list-disc list-inside text-gray-700">
                        <li><strong class="font-semibold">Адрес:</strong> [Ваш адрес]</li>
                        <li><strong class="font-semibold">Телефон:</strong> <a href="tel:[Ваш телефон]" class="text-primary hover:underline">[Ваш телефон]</a></li>
                        <li><strong class="font-semibold">Email:</strong> <a href="mailto:[Ваш email]" class="text-primary hover:underline">[Ваш email]</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </main>
