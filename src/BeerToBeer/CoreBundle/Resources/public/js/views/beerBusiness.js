var app = app || {};

app.BeerBusinessView = Backbone.View.extend({
    tagName: 'div',
    className: 'businessesContainer',
    template: _.template( $( '#businessTemplate' ).html() ),

    render: function() {
        this.$el.html( this.template( this.model.attributes ) );

        return this;
    }
});