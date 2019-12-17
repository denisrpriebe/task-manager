import gql from 'graphql-tag'

export const aboutPageQuery = gql(`query {
    pageByHandle(handle: "about-us") {
        title
        body
    }
}`)
