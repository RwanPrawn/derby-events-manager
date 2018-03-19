Feature: Manage events
  In order to manage events
  I need to be able to retrive, create, update and delete then through the API.

  @createSchema
  Scenario: Create an event
    When I add "Content-Type" header equal to "application/json"
    And I add "Accept" header equal to "application/json"
    And I send a "POST" request to "/events" with body:
    """
    {
      "name": "New event",
      "starDate": "2018-07-10T10:00:00",
      "endDate": "2018-07-10T19:00:00"
    }
    """
    Then the response status code should be 201
    And the response should be in json
    And the header "Content-TYpe" should be equal to "application/json"
    And the JSON should be equal to:
    """
    {
      "@context": "/context/Event"
    }
    """
