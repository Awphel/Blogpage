<script>
  import modal from './signup_modal.vue';

  export default {
    name: 'app',
    components: {
      modal,
    },
    data () {
      return {
        isModalVisible: false,
      };
    },
    methods: {
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
    },
  };
</script>


<template>
    <div class="container">
                <div class="article">
                    <h1>
                      10 Best Photo Apps For Incredible iPhone Photography (2020 Edition)
                    </h1>
                    <div class="hr"></div>
                    <p>
                        How do you capture more interesting travel photos with your iPhone? How do you avoid taking the same cliché vacation photos that everyone else takes? I recently interviewed Steffen Geldner – a talented iPhone photographer with a passion for travel. In this article, Steffen reveals 7 tips for shooting beautiful travel photos that will preserve the amazing memories of your trip. Read on to discover how to take better travel photos with your iPhone!
                    </p>
                    <img class="post_image" src="/img/pic_1.jpg" />
                    <h2>1. Research Your Destination To Find The Best Photo Opportunities
                    </h2>
                    <ul>
                        <li>
                        Before your trip, I recommend researching the destination to find the most interesting photo opportunities.
                        </li>
                        <li>
I always research the location I’m traveling to. I do this extensively and obsessively!
                        </li>
                        <li>
It’s up to you how much research you do. But you should definitely spend a bit of time looking up some great places to take pictures.
                        </li>
                        <li>
So, what kind of research can you do?
                        </li>
                        <li>
First, you could search for photos that other people have taken at the locations you’re planning to visit.
                        </li>
                        <li>
Search on Instagram or Google to get an idea of the kinds of photos people take there.
                        </li>
                    </ul>
                    
                    <h2>2. Capture Your Journey To Tell The Complete Story Of Your Travels
                    </h2>
                    <ul>
                        <li>
                            Travel photography isn't just about photographing the destination.
                        </li>
                        <li>
                            For a more complete photographic story, capture your journey to and from the location you're visiting.
                        </li>
                        <li>
                            If you're traveling by plane, try to get a window seat where you have a view of the wing or propeller.
                        </li>
                        <li>
                            And of course, you could capture a beautiful aerial view of clouds, mountains, or city lights as you're flying above.
                        </li>
                        <li>
                            Your journey will often involve several different types of transport. And they all offer great photo opportunities.
                        </li>
                        <li>
                            Whether you're traveling by car, taxi, bus, train,boat, or plane, try to capture some interesting photos.
                        </li>
                    </ul>
                </div>
                <div class="sidebar">
                    <button @click="showModal"class="button button-cta">Send Me The Tips</button>
                </div>
                <modal v-show="isModalVisible" @close="closeModal" />
    </div>
</template>

<style scoped>
    @import '/css/style.css';
</style>
