import * as bootstrap from 'bootstrap';

export default {
    install(app) {
        app.config.globalProperties.$bootstrap = bootstrap;
    }
}
