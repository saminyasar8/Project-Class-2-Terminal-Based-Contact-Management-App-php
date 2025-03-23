<?php
function generateBill() {
    $totalBill = 0;
    $products = [];

    echo "How many products do you want to add? : ";
    $productCount = (int)readline();

    for ($i = 1; $i <= $productCount; $i++) {
        echo "\nEnter product {$i} name: ";
        $productName = readline();

        echo "Enter price of {$productName}: ";
        $price = (float)readline();

        echo "Enter quantity of {$productName}: ";
        $quantity = (int)readline();

        echo "Enter service charge for {$productName}: ";
        $serviceCharge = (float)readline();

        // Calculate total for this product
        $productTotal = ($price * $quantity) + $serviceCharge;
        $totalBill += $productTotal;

        // Store product information
        $products[] = [
            'name' => $productName,
            'price' => $price,
            'quantity' => $quantity,
            'serviceCharge' => $serviceCharge,
            'total' => $productTotal
        ];
    }

    // Display Bill
    echo "\n========= Ah Shop - Bill List =========\n";

    foreach ($products as $index => $product) {
        echo "Product ".($index+1).": {$product['name']}\n";
        echo "Price: {$product['price']} tk\n";
        echo "Quantity: {$product['quantity']}\n";
        echo "Service Charge: {$product['serviceCharge']} tk\n";
        echo "Total for this product: {$product['total']} tk\n";
        echo "---------------------------------------\n";
    }

    echo "Grand Total Bill: {$totalBill} tk\n";
    echo "=====================================\n";
}

// Call the function
generateBill();
?>