<template>
    <BreezeAuthenticatedLayout>
        <div class="col-lg-6">
            <div class="central-meta">
                <div class="frnds">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Followers</a>
                            <span>55</span></li>
                        <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Following</a><span>60</span></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active fade show " id="frends">
                            <ul class="nearby-contct">
                                <li>
                                    <div class="nearly-pepls">
                                        <figure>
                                            <a href="time-line.html" title=""><img
                                                    src="images/resources/friend-avatar9.jpg" alt=""></a>
                                        </figure>
                                        <div class="pepl-info">
                                            <h4><a href="time-line.html" title="">jhon kates</a></h4>
                                            <span>ftv model</span>
                                            <a href="#" title="" class="add-butn more-action"
                                                data-ripple="">unfriend</a>
                                            <a href="#" title="" class="add-butn" data-ripple="">add friend</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                        </div>
                        <div class="tab-pane fade" id="frends-req">
                            <ul class="nearby-contct">
                                <li v-for="fan in following" :key="fan.id">
                                    <div class="nearly-pepls">
                                        <figure>
                                            <a href="time-line.html" title=""><img src="images/resources/nearly5.jpg"
                                                    alt=""></a>
                                        </figure>
                                        <div class="pepl-info">
                                            <h4><a href="time-line.html" title="">{{ fan.friend.name }}</a></h4>
                                            <span>{{ fan.friend.username }}</span>
                                            <a href="#" title="" class="add-butn more-action" data-ripple="">delete
                                                Request</a>
                                            <a href="#" title="" class="add-butn" data-ripple="">Confirm</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <button class="btn-view btn-load-more"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
    import BreezeAuthenticatedLayout from '@/layouts/Authenticated';
    defineProps({
        following : ''
    })
</script>

<style lang="scss" scoped>

</style>
