<template>
  <div class="chat-component">
    <input type="text" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">
    <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
    export default {
      data() {
        return {
          messageText: ''
        }
      },
      methods: {
        sendMessage() {
          this.$emit('messagesent', {
            message: this.messageText,
            user: {
              name: $('.navbar-nav .dropdown-toggle').text()
            }
          });
          this.messageText = '';
        }
      },
      mounted() {
        //console.log($('.navbar-nav .dropdown-toggle').text());
      }
    }
</script>

<style media="screen">
.chat-component {
  display: flex;
  margin-top: 10px;
}
.chat-component input {
  flex: 1 auto;
}
</style>