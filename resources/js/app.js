import './bootstrap';
import 'select2';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// In your Javascript (external .js resource or <script> tag)
