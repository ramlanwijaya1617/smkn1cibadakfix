import gql from "graphql-tag";


export const GALLERY_LISTS = gql`
query ListImage($after: String = "",$terms: [String] = "") {
    gallerys(first: 9, after: $after,
        where: {taxQuery: {taxArray: {field: SLUG, taxonomy: GALLERY_CATEGORY, terms: $terms, operator: AND}}}) {
        nodes {
            databaseId
            title
            uploadImage {
                imageUpload {
                    sourceUrl(size: LARGE)
                    mediaItemUrl
                }
            }
        }
        pageInfo {
            endCursor
            hasNextPage
        }
    }
}
`;
