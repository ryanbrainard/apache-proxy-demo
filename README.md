Apache Reverse Proxy Demo
=========================

This is a demo of creating a reverse proxying on a Heroku app to Google. 
This app is basically has no content of its own, but depends on a special 
[fork of the PHP Buildpack](https://github.com/ryanbrainard/heroku-buildpack-phing.git#proxy) 
that includes Apache's `mod_proxy` module to do that actual proxying. 

Live Demo
---------

http://apache-proxy-demo.herokuapp.com/


Try it On Your Own
------------------

    git clone https://github.com/ryanbrainard/apache-proxy-demo.git
    cd apache-proxy-demo
    heroku create -b https://github.com/ryanbrainard/heroku-buildpack-phing.git#proxy
    git push heroku master
    heroku open
