import './bootstrap';
import Waves from 'node-waves';
import '/node_modules/node-waves/dist/waves.min.css';
import Alpine from 'alpinejs';
import axios from 'axios';
import { getDownloadApi } from './api';

window.Alpine = Alpine;
window.axios = axios;

Alpine.start();
Waves.init();
Waves.attach('btn', ['waves-light', 'waves-circle'])

getDownloadApi();