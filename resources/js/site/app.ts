import '../../fonts/involve/stylesheet.css';
import '../../fonts/switzer/stylesheet.css';
import '../../fonts/switzer-variable/stylesheet.css';
import '../../css/tokens.css';
import '../../css/site.css';

import Alpine from 'alpinejs';

declare global {
    interface Window {
        Alpine: typeof Alpine;
    }
}

window.Alpine = Alpine;
Alpine.start();
