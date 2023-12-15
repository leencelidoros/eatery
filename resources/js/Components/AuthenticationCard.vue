<template>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card  mt-5 shadow-lg p-3 mb-5 bg-body rounded ">
                        <div class="">
                            <div>
                                <slot name="logo" />
                            </div>
                        </div>
                        <div class="card-body">
                            <slot />
                        </div>
                    </div>
                </div>
            </div> 
        </div>
</template>
