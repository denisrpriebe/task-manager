import gql from 'graphql-tag'

export const shopInfoQuery = gql(`query {
    shop {
        name
        primaryDomain {
            url
            host
        }
    }
}`)
