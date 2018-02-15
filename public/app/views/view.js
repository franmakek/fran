
import Backbone     from 'backbone';
import {Router}                 from 'app/Router.js';

class MainView extends Backbone.view
{

        constructor () {
        super();
    }

    render()
    {
        $('#spadiv').html(index());

        console.log('test');
    }

}

export {MainView};



