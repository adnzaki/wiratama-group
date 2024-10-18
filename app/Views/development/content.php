<div class="apartment-details-left sp6" id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="apartment-author-area pdright">
                    <h2 class="text-anime-style-3">Website Development Page</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1000">
                        Jika anda melihat halaman ini, segera tinggalkan.
                        Karena ini adalah halaman khusus developer. Mengakses halaman ini tanpa pengetahuan yang cukup
                        dapat menyebabkan kerusakan pada website anda.
                    </p>
                    <div class="space24"></div>
                    <div class="apartment-contactbox">
                        <h3>{{ title }}</h3>
                        <div class="space16"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-area">
                                    <input type="password" v-model="password" placeholder="Developer Password*" required>
                                </div>
                            </div>
                            
                            <div class="space24"></div>
                            <div class="col-lg-12">
                                <div class="input-area text-end">
                                    <button type="button" :disabled="disableButton" @click="runTask" :class="['header-btn4', disableButton ? 'disabled-button' : '']">Let's run the task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>