<template>
  <transition name="modal-fade">
    <div class="modal-backdrop">
      <div class="modal"
        role="dialog"
        aria-labelledby="modalTitle"
        aria-describedby="modalDescription"
      >
        <header
          class="modal-header"
          id="modalTitle"
        >
            <button
              type="button"
              class="btn-close"
              @click="close"
              aria-label="Close modal"
            >
              x
            </button>
            <p>Step 1 of 2</p>
        </header>
        <section
          class="modal-body"
        >
          <form>
            <p>Enter Your Email To Get <mark class="green">FREE</mark>
iPhone Photography Email Tips:
            </p>
            <input type="email" placeholder="Please enter your email here" required />
            <button @click="showModal"class="button button-cta">Send Me The Tips</button>
            </form>
        </section>
      </div>
    </div>
  </transition>
</template>

<style scoped>
    @import '/css/style.css';
</style>

<script>
  export default {
    name: 'modal',
    methods: {
      close() {
        this.$emit('close');
      },
    },
  };
</script>
