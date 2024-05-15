import LazyLoad from 'vanilla-lazyload';

export default function lazyLoading() {
    const pageLazyLoad = new LazyLoad({ // eslint-disable-line no-unused-vars
        elements_selector: '[loading=eager], [loading=lazy]',
        use_native: false, // ← enables hybrid lazy loading
        threshold: 100,
    });
}
