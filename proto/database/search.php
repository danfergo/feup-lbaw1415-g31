<?php
    function search($search, $lowerLimit, $higherLimit, $order) {
        global $conn;

        $stmt = $conn->prepare("SELECT *
                                    FROM auction_view, auction
                                    WHERE auction_view.auction_id = auction.auction_id
                                        AND auction_view.auction_state LIKE 'active'
                                        AND (auction.item_title LIKE ?
                                        OR auction.item_description LIKE ? )
                                    ORDER BY ".order($order)."
                                    OFFSET ? LIMIT ?");

        $stmt->execute(array('%' . $search . '%', '%' . $search . '%', $lowerLimit, $higherLimit));

        return $stmt->fetchAll();
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
