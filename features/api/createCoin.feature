Feature:
  In order to add new coin to the collection
  As a user
  I want to make api request with payload

  @api
  Scenario: Add a new coin
    When I send a "POST" request to "/coins" with data:
    """
    {
      "title": "New coin",
      "description": "This is a new coin in collection",
      "year": 2000
    }
    """
    Then the response should be received
    And the response status code should be 201
    And the JSON response should contain:
      | title       | New coin                         |
      | description | This is a new coin in collection |
      | year        | 2000                             |
