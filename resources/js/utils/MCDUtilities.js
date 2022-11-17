/**
 * Indie Tech Solutions
 *
 * Utilities Lib
 *
 */
 
 /**
  * Usefull Helpers
  */
  export class MCDHelpers {
    /**
     * This prevents the page from scrolling down to where it was previously.
     */
    static getParam(url) {
      const paramUrl = url.split("?");
      if (paramUrl.length == 1) {
        return {};
      }
      const param = (function (a) {
        if (a == "") return {};
        var b = {};
        for (var i = 0; i < a.length; ++i) {
          var p = a[i].split('=', 2);
          if (p.length == 1)
            b[p[0]] = "";
          else
            b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
        }
        return b;
      })(paramUrl[1].split('&'));
      return param;
    }
  
    static backToTopOnReload() {
      if ("scrollRestoration" in history) {
        history.scrollRestoration = "manual";
      }
  
      window.scrollTo(0, 0);
    }
  
    /**
     * force all external to open in new tab
     */
  
    static shuffle(array) {
      var currentIndex = array.length,
        randomIndex;
  
      // While there remain elements to shuffle...
      while (0 !== currentIndex) {
  
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;
  
        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
          array[randomIndex], array[currentIndex]
        ];
      }
  
      return array;
    }
  
    static forceExternalLinks() {
     var all_links = document.querySelectorAll("a");
     for (var i = 0; i < all_links.length; i++) {
         var a = all_links[i];
         if (a.hostname != location.hostname) {
             a.rel = "noopener";
             a.target = "_blank";
         }
     }
 }
  
    /**
     * Workaround to prevent broken wp plugins
     *
     * @param {*} container
     */
    static vueFixWpPlugins(container) {
      // look for scripts inside vue elements
      const scripts = container.querySelectorAll("script");
      // look for scripts inside vue elements
      const styles = container.querySelectorAll("style");
      // just for gravity iform
      const iframes = container.querySelectorAll("iframe[name*='gform_ajax_']");
      
      if (scripts && scripts.length >0) {
        for (const script of scripts) {
            document.body.appendChild(script);
        }
      }
      
      if (styles && styles.length >0) {
        for (const style of styles) {
            document.body.appendChild(style);
        }
      }

      if (iframes && iframes.length >0) {
        for (const iframe of iframes) {
            document.body.appendChild(iframe);
        }
      }
    }
  }
  