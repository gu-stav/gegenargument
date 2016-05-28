(function(window, $) {
  var Navigation = function($el) {
    var self = this;

    this.$el = $el;
    this.open = [];

    $('.navigation__toggle').on('click.navigation', function(e) {
      e.preventDefault();

      if(self.$el.data('navigation-open') === true) {
        self.hideNavigation();
      } else {
        self.showNavigation();
      }
    });

    this.$el.on('click.navigation', '.menu-item > a', function(e) {
      var $eTarget = $(this);
      var $subnav = $eTarget.next('.sub-menu');

      if($subnav.length) {
        e.preventDefault();

        self.toggleItem($eTarget);
      }
    });
  };

  Navigation.prototype = {

    /*

      Close all items

    */

    closeAllItems: function() {
      var self = this;

      $.each(this.open, function(openEl) {
        var $openEl = $(openEl);
        self.closeItem($openEl);
      });
    },

    /*

      Close single item

    */

    closeItem: function($el) {
      var self = this;
      $(window).off('click.navigation');
      $el.closest('.menu-item').removeClass('menu-item--is-active');
      this.open = [];
    },

    /*

      Open single item

    */

    openItem: function($el) {
      var self = this;

      this.open.push($el);
      $el.closest('.menu-item').addClass('menu-item--is-active');

      setTimeout(function() {
        $(window).on('click.navigation', function(e) {
          var $eTarget = $(e.target);

          if(!$eTarget.closest(self.$el).length) {
            self.closeAllItems();
          }
        });
      }, 50);
    },

    toggleItem: function($el) {
      if($el.closest('.menu-item').hasClass('menu-item--is-active')) {
        return this.closeItem($el);
      } else {
        return this.openItem($el);
      }
    },


    /*

      Hide navigation

    */

    hideNavigation: function() {
      this.$el.data('navigation-open', false);
      this.$el.find('.navigation__list').removeClass('navigation__list--is-visible');
    },


    /*

      Show navigation

    */

    showNavigation: function() {
      this.$el.data('navigation-open', true);
      this.$el.find('.navigation__list').addClass('navigation__list--is-visible');
    },
  };

  window.Navigation = Navigation;

}(window, jQuery));