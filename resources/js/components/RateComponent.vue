<template>
<div class="svg-star">

    <div class="svg-star__stars">
      <svg
        v-for="num in (rating).times() /* <-- This is awesome! */"
        :key="num"
        :class="{active: ratingSetValue > num /* index starts at 0 😉 */}"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 19.481 19.481"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        enable-background="new 0 0 19.481 19.481"
        @click="starClick(num)"
      >
        <g>
          <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
        </g>
      </svg>
    </div>
      <button
      v-if="status"
        type="button"
        class="btn btn-danger svg-star__control__btn svg-star__control__btn--subtract"
        @click="removeRating()"
      >
        -
      </button>
    <button v-if="status"
      type="button" 
      class="btn svg-star__control btn-success svg-star__control__btn svg-star__control__btn--add" 
      @click="addRating()">
      +
    </button>
    <button 
      v-if="status"
      type="button" 
      class="btn svg-star__control btn-success svg-star__control__btn svg-star__control__btn--add" 
      @click="updateRate()">
      ثبت
    </button>
    <div v-if="!status">نظر شما ثبت شد.</div>
  </div>
</template>

<script>
    export default {
  name: 'SVGStar',
  props: {
    // The number of stars you want to appear/display
    rating: { type: Number, default: 5 },
    // The number of stars to be active (filled)
    ratingValue: { type: Number, default: 3 },
    rateId: ''
  },
  data() {
    return {
      ratingSetValue: 0,
      status: true
    }
  },
  methods: {
    updateRate(){
        this.status = false;
        var rate = this.ratingValue * (this.ratingSetValuet/10)
        rate = this.ratingValue * rate;
        var data = {
            rate: rate,
            id: this.rateId
        }
        axios.post('/api/article/rate', data).then(response => {
            console.log(response)
        }).catch(error => {
        });

    },
    starClick(num) {
      // Our (num).times() is index base
      // which means it starts from zero
      this.ratingSetValue = (num + 1)
    },
    addRating() {
      this.ratingSetValue += 1
    },
    removeRating() {
      // You should not be able to vote zero once voted
      if (this.ratingSetValue > 1) {
        this.ratingSetValue -= 1
      }
    }
  },
  created() {
    // Sets an initial value, if any
    this.ratingSetValue = this.ratingValue
    // ESlint will not be happy with this 🤷🏽‍♂️
    Number.prototype.times = function() {
      let i = -1
      const arr = []
      while (++i < this) {
        arr.push(i)
      }
      return arr
    }
  }
}
</script>

<style scoped lang="scss">
  svg.active {
    fill: #e4720c;
  }
  svg {
    fill: #9cacbd;
    width: 20px;
  }
  .svg-star__control {
    with: 10px;
  }
  /** I leave to you to style your button **/
</style>