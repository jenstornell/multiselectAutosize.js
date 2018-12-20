let multiselectAutosize = (function () {
  let fn = {};
  let o = {};

  // Init
  fn.init = function(options) {
    o = Object.assign({}, fn.defaults(), options);
    fn.set();
  };

  // Defaults
  fn.defaults = function() {
    return {
      selector: 'select[multiple]'
    };
  };

  // Set
  fn.set = function() {
    let elements = document.querySelectorAll(o.selector);
    elements.forEach((el) => {
      if(el.hasAttribute('size')) {
        el.dataset.size = el.getAttribute('size');
      }
      el.setAttribute('size', el.childElementCount);
    });
  };

  // Destroy
  fn.destroy = function(elements) {
    elements.forEach((el) => {
      if(typeof el.dataset.size !== undefined) {
        el.setAttribute('size', el.dataset.size);
      }
    });
  };

  return fn;
})();