<?php

namespace Alfaview\Client\Test\Api;

/**
 * Cleanup for the integration tests: deletes every room in the company whose display name
 * contains "created by php-sdk". Expects $this->alfaview to be authenticated.
 */
trait DeletesTestRooms
{
    protected function deleteTestRooms(): void
    {
        // listRooms() returns at most one page (default 50 rooms), so follow nextPageToken.
        // Collect first and delete afterwards, so deleting doesn't shift the pages while paging.
        $roomIds = [];
        $pageToken = null;
        do {
            $response = $this->alfaview->roomsApi->listRooms(null, $pageToken);
            foreach ($response->getData() ?? [] as $room) {
                if (str_contains((string) $room->getDisplayName(), 'created by php-sdk')) {
                    $roomIds[] = $room->getId();
                }
            }
            $pageToken = $response->getNextPageToken();
        } while (!empty($pageToken));

        foreach ($roomIds as $roomId) {
            $this->alfaview->roomsApi->deleteRoom($roomId);
        }
    }
}
