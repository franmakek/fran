
import Backbone     from 'backbone';
import $            from 'jquery';
import _            from 'underscore';

class AppRouter extends Backbone.Router
{
    constructor(args)
    {
        super(args);

        this.$element = {};

        this.routes = {};

    }

    setElement($element)
    {
        this.$element = $element;

        return this;
    }


    start()
    {

        this._bindRoutes();


        console.log('start');

        Backbone.history.start({pushState: true});

        $(document).on("click", "a[data-routable='true']", (e) =>
        {

            console.log(this.routes);

            e.preventDefault();

            let $a = $(e.currentTarget);

            let href = $a.attr("href");
            let fragment = Backbone.history.fragment;


                Backbone.history.loadUrl(href, true);

                $('#spadiv img').attr('src', $('#spadiv img').attr('src'));
        });

        return this;
    }

    add(path, callback)
    {
        let route  = {};

        route[path] = callback;

        _.extend(this.routes, route);

        return this;
    }

}

let Router = new AppRouter();
export {Router};