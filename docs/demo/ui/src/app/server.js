import configureStore from '../../src/store/configureStore';
import App from '../../src/components/App';

global.App = App;
global.configureStore = configureStore;

// export App and configureStore
// SSR component only
