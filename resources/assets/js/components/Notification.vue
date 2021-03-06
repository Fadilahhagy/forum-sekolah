<template>
    <li class="nav-item dropdown" style="margin-right:20px;">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <i class="fas fa-globe-asia"></i>
            Notification <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li v-for="notification in notifications">
                <a href="" style="color:black;" v-on:click="MarkAsRead(notification)"  class="dropdown-item">
                    Someone commented on your post <br>
                     <strong> {{ notification.data.post.title }} </strong>
                </a>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
       props: ['notifications'],
        methods: {
            MarkAsRead : function(notification) {
                var data = {
                    id: notification.id
                };
                axios.post('/notification/read', data).then(response => {
                    window.location.href = "/show_post/" + notification.data.post.id;
                });
            }
        }
    }
</script>
