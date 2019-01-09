<template>
  <div class="chat-log">
      <chatmsg v-for="message in messages" v-bind:message="message"></chatmsg>
  </div>
</template>

<script>
export default {
  props: ['messages']
}
</script>

<style lang="css">

.chat-log .chat-msg:nth-child(even) {
  background-color: #ccc;
}

.chat-log {
  
}

</style>
