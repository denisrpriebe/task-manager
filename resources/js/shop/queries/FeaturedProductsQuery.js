import gql from 'graphql-tag'

export const featuredProducts = gql(`query {
    collectionByHandle(handle: "featured") {
        descriptionHtml
        products(first: 10) {
            edges {
                node {
                    id
                    title
                    handle
                    description
                    priceRange {
                        minVariantPrice {
                            amount
                        }
                    }
                    images(first: 1) {
                        edges {
                            node {
                                transformedSrc
                            }
                        }
                    }
                }
            }
        }
    }
}`)
