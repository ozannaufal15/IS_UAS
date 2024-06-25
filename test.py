import requests

data = {
    "transaction_time": "2024-06-25 09:38:16",
    "transaction_status": "capture",
    "transaction_id": "2ab0f34b-238f-4fe1-8eff-7618faef7cda",
    "three_ds_version": "2",
    "status_message": "midtrans payment notification",
    "status_code": "200",
    "signature_key": "c0c212b87c8c742e0b1171fc4c3ec3119456cec38778713f25778af866b089a7726660ce23f37511307059856b52f05b2f4fd02cc72cd0058bb987653eb9a375",
    "payment_type": "credit_card",
    "order_id": "INV-E-MART-20240625001-8086",
    "metadata": {
    },
    "merchant_id": "G343680126",
    "masked_card": "48111111-1114",
    "gross_amount": "12500.00",
    "fraud_status": "accept",
    "expiry_time": "2024-07-03 09:38:16",
    "eci": "05",
    "currency": "IDR",
    "channel_response_message": "Approved",
    "channel_response_code": "00",
    "card_type": "credit",
    "bank": "mega",
    "approval_code": "1719283104760"
}
r = requests.post(
    "https://isecommerce.azurewebsites.net/api/payment/success", json=data)

print(r.status_code)
