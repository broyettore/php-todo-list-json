'use strict';

const { createApp } = Vue;

createApp({
    data() {
        return {
            isShow: false,
            toDoAdd: null,
            toDoList: [],
        }
    },
    methods: {

        showToggle() {
            this.isShow = !this.isShow
        },

        addItem() {
                const data = {
                    newTask: this.toDoAdd
                };
    
                axios.post('server.php', data, {
                    headers: { 'Content-Type': 'multipart/form-data'}
                })
                    .then((response) => {
                        this.toDoList = response.data;
                        this.toDoAdd = "";
                        console.log(this.toDoList)
                    })
 
        },
        cancelItem(index) {
            this.toDoList.splice(index, 1);
        },
        showDone(element) {
            if (element.done === true) {
                return element.done = false;
            } else {
                return element.done = !element.done;
            }
        }
    },
    created() {

       axios.get('server.php')
            .then((response) => {
                this.toDoList = response.data;
            })
    }
}).mount("#app")