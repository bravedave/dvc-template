<?php
/*
	David Bray
	BrayWorth Pty Ltd
	e. david@brayworth.com.au

	This work is licensed under a Creative Commons Attribution 4.0 International Public License.
		http://creativecommons.org/licenses/by/4.0/

	*/	?>
<main class="container" v-cloak>
  <div class="row">
    <div class="col">
      <h1>{{title}}</h1>
    </div>

  </div>

  <div class="row">
    <div class="col">
      <card-primary v-bind="left"></card-primary>
    </div>
    <div class="col">
      <card-primary v-bind="center"></card-primary>
    </div>
    <div class="col">
      <card-primary v-bind="right"></card-primary>
    </div>
  </div>
</main>
<script>
$(document).ready( function() {
  _brayworth_.Vue.block({block:'card-primary'}).then( function( d) {

    // console.log( d);

    var cardPrimary = {
      props: ['title','body','footer'],
      template: d,
      filters : {
        capitalize: function (value) {
          if (!value) return ''
          return value.toCapitalCase();

        }

      }

    }

    Vue.component('card-primary', cardPrimary);

    _brayworth_.Vue({
      el : '.container',
      data : {
        title : 'hello world',
        left : {
          title : 'left',
          body :'i like to be left'
        },
        center : {
          title : 'center',
          body :'I like to be center'
        },
        right : {
          title : 'right',
          body :'i like to be right'
        },

      // },
      // components : {
      //   'card-primary' : cardPrimary

      }

    })

  })

})
</script>
