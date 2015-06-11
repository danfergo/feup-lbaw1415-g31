<?php

    function search($search, $lowerLimit, $higherLimit, $order) {
        global $conn, $BASE_DIR;

        $stmt = $conn->prepare("SELECT *
                                    FROM auction_view, auction
                                    WHERE auction_view.auction_id = auction.auction_id
                                        AND auction_view.auction_state LIKE 'active'
                                        AND (auction.item_title LIKE ?
                                        OR auction.item_description LIKE ? )
                                    ORDER BY ".order($order)."
                                    OFFSET ? LIMIT ?");

        $stmt->execute(array('%' . $search . '%', '%' . $search . '%', $lowerLimit, $higherLimit));

        $auctions = array();
        while($row = $stmt->fetch() )
        {
            if(file_exists($BASE_DIR . 'images/auction/' . $row['auction_id'])) {
                $row['photo'] = 'images/auction/' . $row['auction_id'] . '/' .array_values(array_diff(scandir($BASE_DIR . 'images/auction/' . $row['auction_id']), array('..', '.')))[0];
            }else $row['photo'] = 'images/item-prev.jpg';
            $auctions[] = $row;
        }
        return $auctions;

        return $auctions;
    }

    function order($order){
        switch ($order) {
            case "COST_PORTS_DOWN":
                return "auction_view.page_rank DESC";
            case "COST_PORTS_UP":
                return "auction_view.page_rank ASC";
            case "COST_DOWN":
                return "auction_view.current_bid DESC";
            case "COST_UP":
                return "auction_view.current_bid ASC";
            case "BIDS_DOWN":
                return "auction_view.nr_bids DESC";
            case "BIDS_UP":
                return "auction_view.nr_bids ASC";
            case "TIME_DOWN":
                return "auction_view.time_remaining DESC";
            case "TIME_UP":
                return "auction_view.time_remaining ASC";
            case "RANK_DOWN":
                return "auction_view.page_rank DESC";
            case "RANK_UP":
                return "auction_view.page_rank ASC";
            default:
                throw new Exception('Invalid order.');
                break;
        }
    }
