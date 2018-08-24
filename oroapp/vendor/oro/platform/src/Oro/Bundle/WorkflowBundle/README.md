# OroWorkflowBundle

OroWorkflowBundle enables developers to incorporate business processes into the Oro applications by defining and managing conditional sequences of entity transformations in Workflows and Processes YAML configuration files.

## Overview

In the scope of this bundle existed two useful features,
to wit - [workflow](./Resources/doc/reference/workflow/index.md) and
[processes](./Resources/doc/reference/processes/index.md).

Workflow is a complex solution that allows user to perform set of actions with predefined conditions -
each next action depends on previous. Also Workflow can be described as some kind of wizard that helps user
to perform complex actions. Usually Workflow is used to manage some specific entity and to create additional
related entities.

Processes provide possibility to automate tasks related to entity management. They are used main doctrine events
to perform described tasks at the right time. Each process can be performed immediately or after some timeout.
Processes use OroMessageQueue component and the bundle to provide possibility of delayed execution.

Please see [documentation](./Resources/doc/index.md) for more details.
