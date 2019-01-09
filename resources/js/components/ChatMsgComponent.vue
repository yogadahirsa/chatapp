<template>
    <div class="chat-msg">
      <p>{{ message.message }}</p>
      <small>{{ message.user.name }}</small>
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>

<style media="screen">

.chat-msg {
  padding: 5px;
}

</style>
