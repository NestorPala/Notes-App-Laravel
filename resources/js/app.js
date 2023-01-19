import React from 'react';
import ReactDOM from 'react-dom';
import App from "./components/App"

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

const apiUrl = document.getElementById("api-url").innerText;

if (document.getElementById('react-app')) {
    ReactDOM.render(<App apiUrl={apiUrl} />, document.getElementById('react-app'));
}