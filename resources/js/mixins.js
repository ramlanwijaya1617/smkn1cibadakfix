
import dateFormat from 'dateformat';

export default {
    data() {
        return {
            searchValue : '',
        }
    },
    methods: {
        customdate(tempdate) {
            let postDate = new Date(tempdate)
            return dateFormat(postDate, "mmmm dd, yyyy")
        },

        getDefaultData(keyword) {
            let param = new URL(window.location)
            if (param.search != "") {
                if (param.searchParams.get(keyword)) {
                    this.searchValue = param.searchParams.get(keyword)
                    return param.searchParams.get(keyword)
                }else{
                    return ''
                }
            }else{
                return ''
            }
        },

        addSearch(keyword,e){
            if (e != '' || e != 'null') {
                this.updateSearch(keyword,e)
                this.searchValue = e
            }else{
                this.removeSearchParams(keyword)
            }
        },

        updateSearch(paramName,value) {
            const url = new URL(window.location)
            url.searchParams.set(paramName, value)
            window.history.pushState({}, "", url)
        },

        removeSearchParams(paramName){
            const url = new URL(window.location)
            url.searchParams.delete(paramName)
            window.history.pushState({}, "", url)
        },
    },
};




























