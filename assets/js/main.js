'use strict';

const { createApp } = Vue;

createApp({
    data() {
        return {
            isShow: false,
            toDoAdd: null,

        }
    },
    methods: {

        showToggle() {
            this.isShow = !this.isShow
        },

    }
}).mount("#app")