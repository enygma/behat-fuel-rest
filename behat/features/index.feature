Feature: Testing the RESTfulness of the Index controller
	Let's see how RESTish this is

	Scenario: Creating a new User
		Given that I want to make a new "User"
		And that its "name" is "Chris"
		When I request "/user/index.json"
		Then the response is JSON
		And the response has a "userId" property
		And the type of the "userId" property is numeric
		Then the response status code should be 200

	Scenario: Finding a User
		Given that I want to find a "User"
		And that its "name" is "Chris"
		When I request "/user/index.json"
		Then the "name" property equals "Chris"

	Scenario: Deleting a User
		Given that I want to delete a "User"
		And that its "name" is "Chris"
		When I request "/user/index.json"
		Then the "status" property equals "true"