import httpClient from './httpClient';

export default class Posts {
    static getBlogs(formData) {
        return httpClient.post('/blogs/all', formData);
    }
}
