var app = app || {};

app.BusinessView = Backbone.View.extend({
    tagName: 'div',
    className: 'row business',
    template: _.template( $( '#business' ).html() ),

    render: function() {
        this.$el.html( this.template( this.model.attributes ) );

        return this;
    }
});